#- How many letter "A" in array => 5
fruits = ["banana", "coconut", "mango", "orange"]
res =0
for i in range(len(fruits)):
    for j in range(len(fruits[i])):
        if fruits[i][j]=="A" or fruits[i][j] =="a":
            res+=1
print(res)