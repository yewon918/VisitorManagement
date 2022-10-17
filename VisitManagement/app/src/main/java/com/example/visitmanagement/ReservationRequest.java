package com.example.visitmanagement;

import android.graphics.Bitmap;

import androidx.annotation.Nullable;

import com.android.volley.AuthFailureError;
import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

public class ReservationRequest extends StringRequest {
    private static final String URL ="http://ferrydraw.dothome.co.kr/reservation.php"; ;//여기 주소 바꾸기
    private Map<String, String> map;
    public ReservationRequest(String Date, String Reason, String Person, String Place, Response.Listener<String> listener, Response.ErrorListener errorListener) {
        super(Method.POST, URL, listener, errorListener);

        map = new HashMap<>();
        map.put("Date",Date);
        map.put("Reason", Reason);
        map.put("Person",Person);
        map.put("Place", Place);
    }
    @Override
    protected Map<String, String> getParams() throws AuthFailureError {
        return map;
    }
}
