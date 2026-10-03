# Write a program to perform Knapsack Problem.

def knapsack(n, c, w, p):
    if (n == 0 or c == 0): return 0
    if (w[n-1] > c): return knapsack(n-1,c,w,p)
    else: return max(p[n-1] + knapsack(n-1, c-w[n-1],w,p),knapsack(n-1,c,w,p))

#  option 1
# n = int(input("Enter n: "))
# print(f"Knapsack problem using recursion\n\nOptimal solution : {knapsack(n,int(input('Enter capacity of knapsack: ')), [int(input(f'Enter weight for item {i + 1}: ')) for i in range(n)], [int(input(f'Enter price for item {i + 1}: ')) for i in range(n)])}")

# option 2
n = int(input("Enter n: "))
capacity = int(input('Enter capacity of knapsack: '))

weights = []
for i in range(n):
    weight = int(input(f'Enter weight for item {i + 1}: '))
    weights.append(weight)

prices = []
for i in range(n):
    price = int(input(f'Enter price for item {i + 1}: '))
    prices.append(price)
print(f"Knapsack problem using recursion\n")
print(f"Weights: {weights}\nPrices: {prices}") 
print(f"\nOptimal solution : {knapsack(n, capacity, weights, prices)}")

# OUTPUT
#Enter n: 4
#Enter weights for each item: 
#7
#3
#4
#5
#Enter prices for each item: 
#42
#12
#40
#25
#Enter capacity of knapsack: 10
#Knapsack problem using recursion
#Weights = [7, 3, 4, 5]
#Costs = [42, 12, 40, 25]
#Optimal solution : 65
