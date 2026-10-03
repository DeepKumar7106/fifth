# Sort a given set of n integer elements using Merge Sort 
# method and compute its time complexity. Run the program for 
# varied values of n> 5000, and record the time taken to sort. 

import random
import time
from array import array

def merge_sort(arr):
    if len(arr) <= 1:
        return arr

    mid = len(arr) // 2
    left = arr[:mid]
    right = arr[mid:]

    left = merge_sort(left)
    right = merge_sort(right)

    return merge(left, right)

def merge(left, right):
    result = array('i')
    i = j = 0
    while i < len(left) and j < len(right):
        if left[i] < right[j]:
            result.append(left[i])
            i += 1
        else:
            result.append(right[j])
            j += 1

    result.extend(left[i:])
    result.extend(right[j:])
    return result

n = int(input("Enter range of input values: "))
if n <= 5000:
    print("Enter the number greater than 5000")
else:
    random_array = array('i', [random.randint(0, 10000) for _ in range(n)])

    start_time = time.time()
    sorted_array = merge_sort(random_array)
    end_time = time.time()

    time_taken = end_time - start_time
    print(f"Sorted array :{sorted_array}\nTime taken: {time_taken} seconds")

# OUTPUT
# Enter range of input values: 5001
# Sorted array :array('i', [2, 3, 3, 9, 10, ....., 9996])
# Time taken: 0.02899765968322754 seconds

