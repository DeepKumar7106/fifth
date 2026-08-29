##program to print all primes numbers in an interval
import math as Math
start = int(input("Enter the start of the interval: "))
end = int(input("Enter the end of the interval: "))

for num in range(start, end + 1):
    if num == 0 or num == 1 or num == 2:
        print(num)
    else:    
        isPrime = True
        sqrt = int(Math.sqrt(num))
        for i in range (2, sqrt):
            if num % i == 0:
                isPrime = False
                break
            if isPrime:
                print(num)
