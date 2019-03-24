
import realtime_demo as f
args = f.get_args()
depth = args.depth
width = args.width

face = f.FaceCV(depth=depth, width=width)

face.detect_face()
print(f.avg_age*100)