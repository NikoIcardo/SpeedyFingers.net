listOfWords = []
filePath = "Z:/Programs/Xampp/htdocs/SpeedyFingers2/text.txt"
filePath2 = 'Z:/Programs/Xampp/htdocs/SpeedyFingers2/TextParsed.txt'
with open(filePath, 'r') as file: 
    with open(filePath2, 'w') as file1:
        for line in file:
            wrd = ''
            for char in line:
                if(char != ' '): 
                    wrd = wrd + char
                else: 
                    wrd = "'" + wrd + "',\n"
                    file1.write(wrd)
                    wrd = ''
                

 
 
    