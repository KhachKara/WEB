import pandas_datareader.data as web
import datetime
start = datetime.datetime(2000, 1, 1)
end = datetime.datetime(2017, 1, 1)
data = web.DataReader("FB", 'google', start, end)
print (data.tail())
