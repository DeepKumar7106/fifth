# Write a program to sort a list of N elements using Insertion Sort 
# Technique. 

from array import array
def insertion(array):
    for i in range(1, len(array)):
        key = array[i]
        j = i - 1
        while j >= 0 and array[j] > key:
            array[j+1] =  array[j]
            j -= 1
        array[j+1] = key
    print(array.tolist())


arr = array('i', [])
n = int(input("Enter n: "))
for i in range(n):
    arr.append(int(input(f"Enter element {i + 1}:" )))
insertion(arr)

# OUTPUT
# Enter n: 7
# Enter element 1:34
# Enter element 2:25
# Enter element 3:55
# Enter element 4:43
# Enter element 5:45
# Enter element 6:76
# Enter element 7:75
# [25, 34, 43, 45, 55, 75, 76]