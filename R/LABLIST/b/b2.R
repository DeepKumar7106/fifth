x = c(11,13,14,16,16,15,15,14,13,13)
y = c(50,50,55,60,65,65,65,60,60,50)

c_rel = cor(x,y, method="pearson")
print(c_rel)
if(c_rel == 1.0){
	print("Perfect Positive Correlation")
} else if (c_rel == -1.0) {
	print("Perfect Negetive Correlation")
} else if (c_rel > 0.5) {
	print("High Degree Positive Correlation")
} else if (c_rel > -0.5) {
	print("High Degree Negetive Correlation")
} else if (c_rel < 0.5) {
	print("Low Degree Positive Correlation")
} else if (c_rel < -0.5) {
	print("Low Degree Negetive Correlation")
} else if (c_rel == 0) {
	print("Not related")
}