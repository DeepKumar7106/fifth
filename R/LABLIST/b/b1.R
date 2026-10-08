# Write a R program to create a Vector containing following 8 
# values and perform the following operations. 
# 4 3 0 5 2 9 4 5 

val = c(0,2,3,4,4,5,5,9)
# a. Find mean, median, mode. 
mean = mean(val)
median = median(val)

find_mode <- function(x) {
	u <- unique(x)
	tab <- tabulate(match(x,u))
	u[tab == max(tab)]
	
}

# b. Find the range. 
d = range(val)
r = diff(d)

# c. Find the 35th and 78th percentile. 
p35 = quantile(val, probs = 0.35, type = 1)
p78 = quantile(val, probs = 0.78, type = 1)

# d. Find the variance and standard deviation 
s2 = var(val)
s = sd(val)

# e. Find the interquartile range. 
i = IQR(val, type=2)

# f. Find the z-score for each value.
z = scale(val)

cat("\nMean: ", mean, "\n")
cat("\nMedian: ", median, "\n")
cat("\nMode: ", find_mode(val), "\n")
cat("\nRange: ", r, "\n")
cat("\n35th percentile: ", p35, "\n")
cat("\n78th percentile: ", p78, "\n")
cat("\nVariance: ", s2, "\n")
cat("\nStandard Deviation: ", s, "\n")
cat("\nInterquartile Range: ", i, "\n")
cat("\nZ scores: ", z, "\n")