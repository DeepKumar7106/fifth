##program to print n fibonacci number
n = int(input("Enter the number: "))
a , b = 0, 1
if n == 1:
    print("Fibonacci numbers: ", a)
elif n > 1:
    print("Fibonacci numbers: ", a, b , end = " ")
    for i in range(2, n):
        print(a + b, end = " ")
        a, b = b, a + b
