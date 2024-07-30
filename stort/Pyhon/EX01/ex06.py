# Replace value less than 10 with
array = [10, 3, 13, 6, 7, 9]
for i in range(len(array)):
    if array[i]<10:
        array[i]=99
print(array)