# Movie-Recommender-System
<h3> Content Based Recommendation System</h3>
   <p>
   This type of filter does not involve other users. Based on what we like, the algorithm will simply pick items with similar content to recommend us. In this case there will be less diversity in the recommendations, but this will work either the user rates things or not. There are many categories we can calculate the similarity on: in the case of movies we can decide to build our own recommender system based on genre only, or maybe we want to include director, main actors and so on. 
   
   In this project, <b>genre, director name, actors name</b> are used to make recommendations.<br>
   </p>
   
<img src="https://raw.githubusercontent.com/rohan-sarkarr/Movie-Recommender-System/master/static/images/cbfimg.png" height ="320">

## How to run the project?

1. Install all the libraries mentioned in the [requirements.txt](https://raw.githubusercontent.com/rohan-sarkarr/Movie-Recommender-System/master/requirements.txt) file.
2. Clone this repository in your local system.
3. Open the command prompt from your project directory and run the command `python app.py`.
4. Go to your browser and type `http://127.0.0.1:5000/` in the address bar.
5. Hurray! That's it.

## Similarity Score : 

   How does it decide which item is most similar to the item user likes? Here we use the similarity scores.
   
   It is a numerical value ranges between zero to one which helps to determine how much two items are similar to each other on a scale of zero to one. This similarity score is obtained measuring the similarity between the text details of both of the items. So, similarity score is the measure of similarity between given text details of two items. This can be done by <b>cosine-similarity</b>.
   
## How Cosine Similarity works?

  <b>Cosine similarity</b> is a metric used to measure how similar the documents are irrespective of their size. Mathematically, it measures the cosine of the angle between two vectors projected in a multi-dimensional space. The cosine similarity is advantageous because even if the two similar documents are far apart by the <b>Euclidean distance</b> (due to the size of the document), chances are they may still be oriented closer together. <b>The Smaller the Angle, Higher the Cosine Similarity</b>.
  
  ![image](https://user-images.githubusercontent.com/36665975/70401457-a7530680-1a55-11ea-9158-97d4e8515ca4.png)

  
More about Cosine Similarity : [Understanding the Math behind Cosine Similarity](https://www.machinelearningplus.com/nlp/cosine-similarity/)
