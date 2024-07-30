#- How many letter each fruit => [6, 7, 5, 6]

fruits = ["banana", "coconut", "mango", "orange"]
result =[]
for i in range(len(fruits)):
    result.append(len(fruits[i]))
print(result)
      