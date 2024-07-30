
fruits = ["banana", "coconut", "mango", "orange"]
result = []
for fruit in fruits:
    count = 0
    for char in fruit:
        if char=="n" or char=="N":
            count +=1
    result.append(count)
print(result)