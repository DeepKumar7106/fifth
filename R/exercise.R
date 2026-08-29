val = c(1,2,3,4,5,6,9)
mean = mean(val)

d = range(val)
r = diff(d)
s2 = var(val)
s = sd(val)
i = IQR(val, type=2)
z = scale(val)
cat("\nMean: ", mean, "\n")
cat("\nRange: ", r, "\n")

cat("\nVariance: ", s2, "\n")
cat("\nStandard Deviation: ", s, "\n")
cat("\nInterquartile Range: ", i, "\n")
cat("\nZ scores: ", z, "\n")

data_vector <- val

mean(abs(data_vector - mean(data_vector)))


