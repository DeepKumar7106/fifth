def knapsack(n, c, w, p):
    if (n == 0 or c == 0): return 0
    if (w[n-1] > c): return knapsack(n-1,c,w,p)
    else: return max(p[n-1] + knapsack(n-1, c-w[n-1],w,p),knapsack(n-1,c,w,p))

n = int(input("Enter n: "))
print(f"Knapsack problem using recursion\n\nOptimal solution : {knapsack(n,int(input('Enter capacity of knapsack: ')), [int(input(f'Enter weight for item {i + 1}: ')) for i in range(n)], [int(input(f'Enter price for item {i + 1}: ')) for i in range(n)])}")

##Enter n: 4
##Enter weights for each item: 
##7
##3
##4
##5
##Enter prices for each item: 
##42
##12
##40
##25
##Enter capacity of knapsack: 10
##Knapsack problem using recursion
##Weights = [7, 3, 4, 5]
##Costs = [42, 12, 40, 25]
##Optimal solution : 65
