##program to check weather a number is prime or not
import math as Math
num = int(input("Enter a number: "))
if num == 0 or num == 1 or num == 2:
    print("It is a prime")
else:
    isPrime = True
    sqrt = int(Math.sqrt(num))
    for i in range (2, sqrt):
        if num % i == 0:
            print("it is not a prime")
            isPrime = False
            break
    if isPrime:
        print("It is a prime")
