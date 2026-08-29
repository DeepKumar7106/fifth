##program to calculate the sum of digits
num = int(input("Enter the number: "))
sum = 0
while num > 0:
    sum += num%10
    num//=10

print(f"Sum of digits is {sum}")
