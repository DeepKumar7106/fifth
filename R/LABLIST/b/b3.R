# Write R script to compute the regression equation of y on x from the following data. Predict the value of y when x=7 

# +---+----+----+----+---+---+----+
# X - | 2  |  4 | 5  | 6 | 8 | 11 |
# Y - | 18 | 12 | 10 | 8 | 7 | 15 |
# +---+----+----+----+---+---+----+


x <- c(2, 4, 5, 6, 8, 11)
y <- c(18, 12, 10, 8, 7, 5)

cat("\nX values: ", x)
cat("\nY values: ", y)

#y on x
res <- lm(y~x)

print(summary(res))

#x = 7
p = data.frame(x = 7)

#y when x = 7
print(predict(res, p))