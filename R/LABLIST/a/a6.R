# Create a factor marital_status with levels Married, single, divorced. Perform the following operations on this factor 
marital_status <- factor(c("Married", "Divorced", "single", "Married", "Married"))
print(marital_status)

# a) Check the variable is a factor 
is_factor = is.factor(marital_status)
print(is_factor)

# b) Access the 2nd and 4th element in the factor 
print(marital_status[c(2,4)])

# c) Remove third element from the factor 
marital_status <- marital_status[-3]

# d) Modify the second element of the factor 
marital_status[2] <- "Married"

# e) Add new level widowed to the factor and add the same level to the factor marital_status 
levels(marital_status) <- c(levels(marital_status), "widowed")
marital_status[3] <- "widowed"
print(marital_status)