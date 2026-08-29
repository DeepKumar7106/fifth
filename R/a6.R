
marital_status <- factor(c("Married", "Divorced", "single", "Married", "Married"))
print(marital_status)
is_factor = is.factor(marital_status)
print(is_factor)
print(marital_status[c(2,4)])
marital_status <- marital_status[-3]
marital_status[2] <- "Married"
levels(marital_status) <- c(levels(marital_status), "widowed")
marital_status[3] <- "widowed"
print(marital_status)