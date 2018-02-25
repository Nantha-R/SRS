import nltk
import sys
from nltk.sentiment.vader import SentimentIntensityAnalyzer
from nltk import tokenize
#nltk.download('punkt')
#nltk.download('vader_lexicon')

sentence =sys.argv[1:]
word=""
for i in sentence:
    word+=i+" "
sid = SentimentIntensityAnalyzer()
ss = sid.polarity_scores(word)
print(ss['compound'])
