array=[10,3,13,6,7,9]
#Find average value in array
sum = 0
average = 1
for i in range(len(array)):
    sum += array[i]
average= sum / len(array)
print(average)
