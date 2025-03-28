c = 30.0
t = float(input("희망 온도>>"))

while t < c:
  c -= 0.1
  print("현재 온도:", format(c, ".2f"))
print("냉방 기능 종료 !")