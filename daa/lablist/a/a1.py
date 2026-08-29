##Write a program to sort list of N elements using selection sort
##25th July 2026

from array import array

def selectionSort(array, size):
    for i in range(size - 1):
        min_index = i
        for j in range(i + 1, size):
            if array[j] < array[min_index]:
                min_index = j
        array[i], array[min_index] = array[min_index], array[i]

arr = array('i',[])
size = int(input("Enter the size: "))
print("Enter the elements: ")
for i in range(size):
    arr.append(int(input()))
selectionSort(arr, size)
print("Sorted array: ", arr)

#Write a program to sort a list of N elements using Selection Sort Technique.
#Write a program to sort a list of N elements using Insertion Sort Technique.
#Write a program to read ‘n’ numbers, find minimum and maximum value in an array using divide and conquer.
#4 Write program to implement the BFS algorithm for a graph.
#5 Write program to implement the DFS algorithm for a graph.
#Write a program to implement Strassen's Matrix Multiplication of 2*2 Matrixes