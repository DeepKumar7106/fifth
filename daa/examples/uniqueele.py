from array import array
def uniqueElement(arr):
    n = len(arr)
    for i in range(n - 1):
        for j in range(i + 1, n):
            if arr[i] == arr[j]: return False
    return True

arr = array('i',[])
n = int(input("Enter n: "))
for i in range(n):
    arr.append(int(input(f"Enter element {i + 1}:" )))
print(uniqueElement(arr))
