from array import array
def maxElement(arr):
    maxval = arr[0]
    for i in range (1, len(arr) - 1):
        maxval = arr[i] if arr[i] > maxval else maxval
    return maxval

arr = array('i',[])
n = int(input("Enter n: "))
for i in range(n):
    arr.append(int(input(f"Enter element {i + 1}:" )))
print(maxElement(arr))
