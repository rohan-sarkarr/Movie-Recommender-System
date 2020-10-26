import flask
import pandas as pd
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.metrics.pairwise import cosine_similarity

app = flask.Flask(__name__, template_folder='templates')

data = pd.read_csv('main_data.csv')

count = CountVectorizer()
count_matrix = count.fit_transform(data['comb'])

data = data.reset_index()
indices = pd.Series(data.index, index=data['title'])
all_titles = [data['title'][i] for i in range(len(data['title']))]

def get_recommendations(title):
    cosine_sim = cosine_similarity(count_matrix)
    idx = indices[title]
    sim_scores = list(enumerate(cosine_sim[idx]))
    sim_scores = sorted(sim_scores, key=lambda x: x[1], reverse=True)
    sim_scores = sim_scores[1:11]
    movie_indices = [i[0] for i in sim_scores]
    title = data['title'].iloc[movie_indices]
    dat = data['date_published'].iloc[movie_indices]
    rat = data['avg_vote'].iloc[movie_indices]
    return_df = pd.DataFrame(columns=['Title','Year','Votes'])
    return_df['Title'] = title
    return_df['Year'] = dat
    return_df['Votes'] = rat
    return return_df

# Set up the main route
@app.route('/', methods=['GET', 'POST'])

def main():
    if flask.request.method == 'GET':
        return(flask.render_template('index.html'))
            
    if flask.request.method == 'POST':
        m_name = flask.request.form['movie_name']
        if m_name not in all_titles:
            return(flask.render_template('negative.html',name=m_name))
        else:
            result_final = get_recommendations(m_name)
            names = []
            dates = []
            ratings = []
            for i in range(len(result_final)):
                names.append(result_final.iloc[i][0])
                dates.append(result_final.iloc[i][1])
                ratings.append(result_final.iloc[i][2])                
                
            return flask.render_template('positive.html',movie_names=names,movie_date=dates,movie_rating= ratings,search_name=m_name)

if __name__ == '__main__':
    app.run()
