# - How many letter A in text
text = "I like banana"
count =0
for i in range(len(text)):
    if text[i] =="A" or text[i]=="a":
        count +=1
print(count)