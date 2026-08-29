#insertion
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
