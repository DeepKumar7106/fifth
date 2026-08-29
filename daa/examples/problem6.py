##program to find factorial of a given number
num = int(input("Enter a number: "))
if num == 0 or num == 1:
    print(f"Factorial is 1: ")
else:
    fact = 1
    while num != 1:
        fact *= num
        num-=1

    print(f"Factorial is {fact}: ")
