# - How to make value in array to even number : [2, 4, 4, 2, 6, 8, 10]
numbers = [1, 3, 4, 2, 6, 8, 9]
sum = 0
newArr=[]
for i in range(len(numbers)):
    if numbers[i]%2 == 1:
        sum = numbers[i]+1
        newArr.append(sum)
    else:
        newArr.append(numbers[i])
print(newArr)
