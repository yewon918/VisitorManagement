package com.example.visitmanagement;

import android.content.Intent;
import android.graphics.Bitmap;
import android.os.Bundle;
import android.util.Base64;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

import java.io.ByteArrayOutputStream;

public class reservations extends AppCompatActivity {
    Spinner spinner;
    private EditText date, reason, person;
    private Button btn_confirm;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_reservations);

        //값 찾아주기
        spinner = findViewById(R.id.spinner);
        date=findViewById(R.id.date);
        reason=findViewById(R.id.reason_text);
        person=findViewById(R.id.person_text);
        btn_confirm=findViewById(R.id.confirmbutton);

        ///////////////방문장소 선택//////////////
        ArrayAdapter monthAdapter = ArrayAdapter.createFromResource(this, R.array.place, android.R.layout.simple_spinner_dropdown_item);
        monthAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(monthAdapter); //어댑터에 연결해줍니다.

        spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> adapterView, View view, int i, long l) {
//                String Place = spinner.getSelectedItem().toString();
            }

            @Override
            public void onNothingSelected(AdapterView<?> adapterView) {

            }
        });
        ///////////////////////////////////////
        //confirm버튼 클릭시
        btn_confirm.setOnClickListener(view -> {
            //editText에 입력되어 있는 값 get
            String Date=date.getText().toString();
            String Reason=reason.getText().toString();
            String Person=person.getText().toString();
            String Place = spinner.getSelectedItem().toString();

            Response.Listener<String> responseListener= response -> {
                try{
                    JSONObject jsonObject=new JSONObject(response);
                    boolean success=jsonObject.getBoolean("success");
                    if(success){
                        Toast.makeText(getApplicationContext(),"방문신청을 완료하였습니다.",Toast.LENGTH_SHORT).show();
                        Intent intent=new Intent(reservations.this, menu.class);
                        startActivity(intent);
                    }else{
                        Toast.makeText(getApplicationContext(), "방문신청에 실패하였습니다.", Toast.LENGTH_SHORT).show();
                        return;
                    }
                }catch (JSONException e){
                    e.printStackTrace();
                }
            };

            Response.ErrorListener errorListener = error -> {
                System.out.println(error.getMessage());
            };

            // 서버로 Volley를 이용해서 요청을 함.
            ReservationRequest reservationRequest = new ReservationRequest(Date, Reason,Person,Place, responseListener,errorListener);
            RequestQueue queue = Volley.newRequestQueue(reservations.this);
            queue.add(reservationRequest);
        });


    }

}
