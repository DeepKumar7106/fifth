#min max
from array import array
def findMN(arr, left, right):
    if left ==  right:
        return arr[left], arr[right]
    mid = (left + right) // 2
    min1, max1 = findMN(arr, left, mid)
    min2, max2 = findMN(arr, mid + 1, right)

    return min(min1, min2), max(max1, max2)

arr = array('i', [])
n = int(input("Enter n: "))
for i in range(n):
    arr.append(int(input(f"Enter element {i + 1}:" )))

min_val , max_val = findMN(arr, 0 , n-1)
print(f"The min: {min_val} and max: {max_val}")
