# Write a program to read ‘n’ numbers, find minimum and 
# maximum value in an array using divide and conquer.

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

# OUTPUT
# Enter n: 10
# Enter element 1:1
# Enter element 2:345
# Enter element 3:3
# Enter element 4:5
# Enter element 5:56
# Enter element 6:3
# Enter element 7:74
# Enter element 8:2
# Enter element 9:50
# Enter element 10:75
# The min: 1 and max: 345