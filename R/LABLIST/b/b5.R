# Write R script to perform the following using binomial distribution 

# i. If n=4 and p=0.10, find P(x=3) 
print("Probability of x=3 when n = 4 and p = 0.10")
dbinom(3,4,0.10)

# ii. If n=12 and p=0.45, find P(5<=x<=7) 
print("Probability for n=12 and p=0.45, find P(5<=x<=7)")
dbinom(5, 12, 0.45) + dbinom(6, 12, 0.45) + dbinom(7, 12, 0.45)