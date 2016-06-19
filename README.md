# MCTS

This is the First Version of a lightweight REST API that will bridge between the "Drive Non Stop" Algorithm and the machine learning side.

The input data is located at distanceMatrix.json

The index.html file reads the distance matrix that, as you may infer from its name, contains the distance matrix of the cities/streets, including repetitive time windows of each city/avenue

Once you click on send, the data will be sent to the machine learning side for processing. At this point of time, it is calling the rest_receive.php.

The data is sent using REST's GET method.

Once the data is processed and received back, it will automatically trigger the sender. For this point of time, there is a console.log that shows you the received data.

The files are writting concesly and well-documented. In case you have questions or remarks, feel free to contact me at idriss.benarafa@gmail.com.

I answer swiftly.

Idriss Benarafa
