val = c(0,2,3,4,4,5,5,9)
mean = mean(val)
median = median(val)

find_mode <- function(x) {
	u <- unique(x)
	tab <- tabulate(match(x,u))
	u[tab == max(tab)]
	
}


d = range(val)
r = diff(d)
p35 = quantile(val, probs = 0.35, type = 1)
p78 = quantile(val, probs = 0.78, type = 1)
s2 = var(val)
s = sd(val)
i = IQR(val, type=2)
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