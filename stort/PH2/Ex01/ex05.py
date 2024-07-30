# - Find average of odd number
numbers = [1, 3, 4, 2, 6, 8, 9]
average =0
sum=0
for i in range(len(numbers)):
    if numbers[i]%2 !=0:
        sum+=numbers[i]
average=sum/len(numbers)
print(sum)
print(average)