# - Find index of 2
numbers = [1, 3, 4, 2, 6, 8, 9]
res =0
for i in range(len(numbers)):
    if numbers[i] == 2:
        res += i
print(res)
    