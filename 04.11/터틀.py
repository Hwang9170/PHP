import turtle

score = [80, 90, 100, 95]
t = turtle.Turtle()

for s in score:
    t.forward(100)
    t.left(90)
    t.forward(s)
    t.left(90)
    t.forward(100)
    t.left(90)
    t.forward(s)
    t.left(90)

turtle.done()
