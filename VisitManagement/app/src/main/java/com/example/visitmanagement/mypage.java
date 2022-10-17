package com.example.visitmanagement;

import static android.os.Build.ID;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.RecyclerView;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.text.method.ScrollingMovementMethod;
import android.util.Log;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;

public class mypage<PersonalData> extends AppCompatActivity {
    private static String IP_ADDRESS = "IP주소";
    private static String TAG = "phptest";
    private EditText mEditTextName;
    private EditText mEditTextCountry;
    private TextView mTextViewResult;
    private ArrayList<PersonalData> mArrayList;
    private UsersAdapter iAdapter,bAdapter,pAdapter;
    private RecyclerView mRecyclerView;
    private EditText mEditTextSearchKeyword;
    private String mJsonString;

    TextView my_id, my_belong, my_phone;
    ImageView imageView;
    Button btn_history;

    public mypage() {
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_mypage);

        my_id=(TextView)findViewById(R.id.my_id);
        my_belong=(TextView)findViewById(R.id.my_belong);
        my_phone=(TextView)findViewById(R.id.my_phone);

        Intent intent = getIntent();

        String ID = intent.getExtras().getString("ID");
        my_id.setText(ID);

        Button history_btn= findViewById(R.id.btn_history);
        history_btn.setOnClickListener(view -> {
            Intent intent_history=new Intent(getApplicationContext(),history.class);
            startActivity(intent_history);
        });
//
//        my_id.setMovementMethod(new ScrollingMovementMethod());
//        my_belong.setMovementMethod(new ScrollingMovementMethod());
//        my_phone.setMovementMethod(new ScrollingMovementMethod());
//
//        GetData task = new GetData();
//        task.execute( "http://" + IP_ADDRESS + "/getjson.php", "");
    }
//    private class GetData extends AsyncTask<String, Void, String> {
//
//        ProgressDialog progressDialog;
//        String errorString = null;
//
//        @Override
//        protected String doInBackground(String... params) {
//            String serverURL = params[0];
//            String postParameters = params[1];
//
//
//            try {
//
//                URL url = new URL(serverURL);
//                HttpURLConnection httpURLConnection = (HttpURLConnection) url.openConnection();
//
//
//                httpURLConnection.setReadTimeout(5000);
//                httpURLConnection.setConnectTimeout(5000);
//                httpURLConnection.setRequestMethod("POST");
//                httpURLConnection.setDoInput(true);
//                httpURLConnection.connect();
//
//
//                OutputStream outputStream = httpURLConnection.getOutputStream();
//                outputStream.write(postParameters.getBytes("UTF-8"));
//                outputStream.flush();
//                outputStream.close();
//
//
//                int responseStatusCode = httpURLConnection.getResponseCode();
//                Log.d(TAG, "response code - " + responseStatusCode);
//
//                InputStream inputStream;
//                if(responseStatusCode == HttpURLConnection.HTTP_OK) {
//                    inputStream = httpURLConnection.getInputStream();
//                }
//                else{
//                    inputStream = httpURLConnection.getErrorStream();
//                }
//
//
//                InputStreamReader inputStreamReader = new InputStreamReader(inputStream, "UTF-8");
//                BufferedReader bufferedReader = new BufferedReader(inputStreamReader);
//
//                StringBuilder sb = new StringBuilder();
//                String line;
//
//                while((line = bufferedReader.readLine()) != null){
//                    sb.append(line);
//                }
//
//                bufferedReader.close();
//
//                return sb.toString().trim();
//
//
//            } catch (Exception e) {
//
//                Log.d(TAG, "GetData : Error ", e);
//                errorString = e.toString();
//
//                return null;
//            }
//
//        }
//        }

//    private void showResult() {
//
//        String TAG_JSON="webnautes";
//        String TAG_ID = "id";
//        String TAG_NAME = "name";
//        String TAG_COUNTRY ="country";
//
//
//        try {
//            JSONObject jsonObject = new JSONObject(mJsonString);
//            JSONArray jsonArray = jsonObject.getJSONArray(TAG_JSON);
//
//            for(int i=0;i<jsonArray.length();i++){
//
//                JSONObject item = jsonArray.getJSONObject(i);
//
//                String id = item.getString(TAG_ID);
//                String name = item.getString(TAG_NAME);
//                String country = item.getString(TAG_COUNTRY);
//
//                PersonalData personalData = new PersonalData();
//
//                personalData.setID(ID);
//                personalData.setPhnoe_Num(Phone_Num);
//                personalData.setBelong(Belong);
//
////                mArrayList.add(personalData);
////                mAdapter.notifyDataSetChanged();
//            }
//
//
//
//        } catch ( JSONException e) {
//
//            Log.d(TAG, "showResult : ", e);
//        }
//
//    }

}