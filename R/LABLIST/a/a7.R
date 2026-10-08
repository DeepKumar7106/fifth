# Write a R language Script for following operation on Iris Data Set 
# a) Load the Iris Dataset 
data(iris)

# b) View first six rows of iris dataset 
head(iris)

# c) Summarize iris dataset 
summary(iris)

# d) Display number of rows and columns 
dim(iris)

# e) Display column names of dataset. 
names(iris)

# f) Create histogram of values for sepal length 
hist(iris$Sepal.Length, xlab = "Sepal Length", ylab = "Frequency", main = "Sepal Length")

# g) Create scatterplot of sepal width vs. sepal length 
plot(iris$Sepal.Width, iris$Sepal.Length, xlab = "Sepal Width", ylab = "Sepal Length", main = "Scatter Plot Diagram")

# h) Create boxplot of sepal width vs. sepal length 
boxplot(iris$Sepal.Width~iris$Sepal.Length, xlab = "Sepal Width", ylab = "Sepal Length", main = "Boxplot Diagram")

# i) Find Pearson correlation between Sepal.Length and Petal.Length 
cor(iris$Sepal.Length, iris$Petal.Length, method = "pearson") 

# j) Create correlation matrix for dataset
cor(iris[,1:4])