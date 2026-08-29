##program to calculate simple interest
p = int(input("Enter principle: "))
r = int(input("Enter interest: "))
t = int(input("Enter time : "))

si = (p * t * r) / 100

print(f"Simple interest is {si}")
