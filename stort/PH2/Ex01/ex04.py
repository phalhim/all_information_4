# - Remove number 6 from array
numbers = [1, 3, 4, 2, 6, 8, 9]
result = []
for i in range(len(numbers)):
    if numbers[i] != 6:
        result.append(numbers[i])
print(result)
    