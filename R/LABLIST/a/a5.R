#. Write an R program to create a Data Frame with following details and do the following operations. 
#ItemCode 1001 Electronics 1002 700 Desktop Supplies 300 1003 1004 Office Supplies USB 350 1005 400 CD Drive 800 

#a) Subset the Data frame and display the details of only 
#those items whose price is greater than or equal to 350. 
#b) Subset the Data frame and display only the items where 
#the category is either “Office Supplies” or “Desktop 
#Supplies” 
#c) Subset the Data frame and display the items where the 
#Itemprice between 300 and 700 
#d) Compute the sum of all ItemPrice 
#e) Create another Data Frame called “item-details” with 
#three different fields itemCode, ItemQtyonHand and 
#ItemReorderLvl and merge the two frames.

# Create the initial data frame
ItemCode <- c(1001, 1002, 1003, 1004, 1005)
itemCategory <- c("Electronics", "Desktop Supplies", "Office Supplies", "USB", "CD Drive")
ItemPrice <- c(700, 300, 350, 400, 800)

df <- data.frame(ItemCode, itemCategory, ItemPrice)
print("Original Data Frame:")
print(df)

# a) Subset the Data frame and display the details of only those items whose price is greater than or equal to 350
subset_a <- subset(df, ItemPrice >= 350)
print("a) Items with Price >= 350:")
print(subset_a)

# b) Subset the Data frame and display only the items where the category is either "Office Supplies" or "Desktop Supplies"
subset_b <- subset(df, itemCategory %in% c("Office Supplies", "Desktop Supplies"))
print("b) Items in 'Office Supplies' or 'Desktop Supplies':")
print(subset_b)

# c) Subset the Data frame and display the items where the ItemPrice is between 300 and 700 (inclusive)
subset_c <- subset(df, ItemPrice >= 300 & ItemPrice <= 700)
print("c) Items with Price between 300 and 700:")
print(subset_c)

# d) Compute the sum of all ItemPrice
total_price <- sum(df$ItemPrice)
cat("d) Sum of all ItemPrice:", total_price, "\n\n")

# e) Create another Data Frame called 'item_details' and merge the two frames
item_details <- data.frame(
  ItemCode = c(1001, 1002, 1003, 1004, 1005),
  ItemQtyonHand = c(50, 120, 80, 45, 30),
  ItemReorderLvl = c(10, 20, 15, 10, 5)
)

merged_df <- merge(df, item_details, by = "ItemCode")
print("e) Merged Data Frame:")
print(merged_df)