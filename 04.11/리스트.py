fruits = ["apple", "banana", "cherry"]
print(fruits[0])             # apple
print(len(fruits))           # 3

for fruit in fruits:
    print(fruit)

for idx, fruit in enumerate(fruits):
    print(idx, fruit)

fruits.append("orange")        # 삽입
fruits.insert(1, "grape")      # 특정 위치 삽입
fruits.pop()                   # 마지막 삭제
fruits.remove("banana")        # 특정 삭제
fruits.sort(reverse=True)      # 정렬
print(fruits[1:3])             # 슬라이싱



