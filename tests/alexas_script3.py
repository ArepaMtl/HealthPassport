from sys import argv

script, infile, outfile = argv

intext = open(infile)

outtext = open(outfile, 'w')
outtext.write('var myD = new Object();\n')

keyword = 'data-localize="'

lines = intext.readlines()

i = 0
attr = []
val = []


for l in lines:
	times = l.count(keyword)
	if times > 0:
		for i in range(times):
			init1 = l.find(keyword)
			dist = len(keyword)
			l = l[init1+dist:]
			init2 = l.find('"')
			init3 = l.find('>')
			init4 = l.find('<')
			attr.append(l[:init2])
			val.append(l[init3+1:init4])

#print attr
#print val
#print val[0]
	
for a in attr:
	loc = attr.index(a)				
	times = a.count('.')
	if times == 0:
#		outtext.write('myD.'+str(a)+' = new Object();\n')
		outtext.write('myD.'+str(a)+' = "'+str(val[loc])+'";\n')
	elif times > 0:
		al = a.split('.')
#		print al
		myd = ''
		for i in range(times):
			myd += '.'+al[i]
#			print myd
			outtext.write('if (myD'+myd+' == null) {myD'+myd+' = new Object()};\n')
		myd += '.'+al[times]
#		print myd
		outtext.write('myD'+myd+' = "'+str(val[loc])+'";\n')			
#		print val[loc]
#		print al

outtext.write('console.log(JSON.stringify(myD, null, 4));\n')
#outtext.write('console.log(myD);\n')

