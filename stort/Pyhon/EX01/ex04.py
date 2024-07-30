#- Count odd and event value in array

array=[10,3,13,6,7,9]
odd =array[0]
event =array[0]
for i in range(len(array)):
    if odd %2 == 0:
        odd=array[i]
    if event%2 != 1:
        event=array[i]
print('The odd is: ',odd)
print('The event is: ', event)