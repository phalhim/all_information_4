#Reverse each each name in array => ["ananab", "tunococ", "ognam", "egnaro"]
fruits = ["banana", "coconut", "mango", "orange"]
res = []
for fruit in fruits:
    result = fruit[::-1]
    res.append(result)
print(res)