array=[10,3,13,6,7,9]
#Find min and max value in array
min =array[0]
max =array[0]
for i in range(len(array)):
    if array[i]<min:
        min = array[i]
    if array[i]>max:
       max = array[i]
print("The min number is: ",min)
print("The max number is: " ,max)