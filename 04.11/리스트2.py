lange = ["KOREAN", "ENGLISH", "JAPANESE", "CHINESE"]
lange.remove("ENGLISH")
lange.append("FRENCH")
lange.insert(1, "GERMAN")
lange.sort(reverse=True)


real_lanquage = ["KOREAN", "GERMAN", "FRENCH", "JAPANESE", "CHINESE"] #영어로 함.
real_lanquage.remove("ENGLISH")
real_lanquage.append("FRENCH")
real_lanquage.insert(1, "GERMAN")
real_lanquage.sort(reverse=True)
print(lange)
print(real_lanquage)
# 리스트의 길이
print(len(lange))  # 4
print(len(real_lanquage))  # 5   
# 리스트의 인덱스
print(lange.index("GERMAN"))  # 1
print(real_lanquage.index("GERMAN"))  # 1
# 리스트의 정렬
lange.sort()  # 오름차순 정렬
real_lanquage.sort()  # 오름차순 정렬   
# 리스트의 역정렬
lange.reverse()  # 내림차순 정렬
real_lanquage.reverse()  # 내림차순 정렬

numbers=[5,1,3,4,2,6]
numbers.sort()  # 오름차순 정렬
numbers.reverse()  # 내림차순 정렬
print(numbers)  # [6, 5, 4, 3, 2, 1]

animals = ["호랑이", "사자", "곰", "여우", "늑대"]
animals[1:4]
print(animals) 



#9명